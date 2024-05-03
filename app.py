from flask import Flask, render_template, request, redirect
import mysql.connector

app = Flask(__name__)

# Configurações do banco de dados MySQL
db_config = {
    'user': 'PI3',
    'password': 'Paio1234.',
    'host': 'server-paio-pi3.mysql.database.azure.com',
    'database': 'formulario-paio',
    'ssl_ca': '/Users/eddieferb/Desktop/EddieFerb.github.io/DigiCertGlobalRootCA.crt.pem'
}

# Função para conectar ao banco de dados
def conectar_banco():
    return mysql.connector.connect(**db_config)

# Rota para a página do formulário
@app.route('/')
def formulario():
    return render_template('formulario.html')

# Rota para lidar com o envio do formulário
@app.route('/submit_form', methods=['POST'])
def submit_form():
    if request.method == 'POST':
        nome = request.form['nome']
        email = request.form['email']
        telefone = request.form['telefone']
        genero = request.form['genero']
        data_nascimento = request.form['data_nascimento']
        cidade = request.form['cidade']
        estado = request.form['estado']
        endereco = request.form['endereco']
        sexo = request.form['sexo']

        # Conectar ao banco de dados
        try:
            conn = conectar_banco()
            cursor = conn.cursor()

            # Inserir os dados na tabela
            sql = "INSERT INTO clientes (nome, email, telefone, genero, data_nascimento, cidade, estado, endereco, sexo) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)"
            val = (nome, email, telefone, genero, data_nascimento, cidade, estado, endereco, sexo)
            cursor.execute(sql, val)
            conn.commit()

            return redirect('/sucesso')  # Redirecionar para página de sucesso após o envio do formulário

        except Exception as e:
            return render_template('erro.html', error=str(e))

        finally:
            cursor.close()
            conn.close()

# Rota para a página de sucesso
@app.route('/sucesso')
def sucesso():
    return render_template('sucesso.html')

if __name__ == '__main__':
    app.run(debug=True)
