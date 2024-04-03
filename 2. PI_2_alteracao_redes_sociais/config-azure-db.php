$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "cadastro-de-clientes.mysql.database.azure.com", "PI3", "Paio1234.", "cadastro-de-clientes", 3306, MYSQLI_CLIENT_SSL);