<table class="table">
                    <thead>
                        <tr>
                            <th>Usuário</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_code = "SELECT * FROM loglogin";
                        $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar! " . $mysqli->error); 
                        while($dados = $sql_query->fetch_assoc()) { 
                            echo "<tr>";
                            echo "<td>".$dados['nome']."</td>";
                            echo "<td>".$dados['data']."</td>";                    
                        }
                    ?>
                    </tbody>
                </table>