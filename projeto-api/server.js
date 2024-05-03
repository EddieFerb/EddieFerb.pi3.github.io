const mysql = require('mysql');
const fs = require('fs');

const connection = mysql.createConnection({
  host: 'server-paio-pi3.mysql.database.azure.com',
  user: 'PI3',
  password: 'Paio1234.',
  database: 'formulario-paio',
  port: 3306,
  ssl: {
    ca: fs.readFileSync('/Users/eddieferb/Desktop/EddieFerb.github.io')
  }
});

connection.connect((err) => {
  if (err) {
    console.error('Erro de conexão:', err.stack);
    return;
  }
  console.log('Conexão bem sucedida');
});

// Faça as operações no banco de dados aqui...

connection.end();
