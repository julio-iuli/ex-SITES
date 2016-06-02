// Há uma gambiarra para o tratamento dos arquivos Json... por hora, fica assim mesmo

                function carregarEstados(){
                    var ajax;
                    ajax = new XMLHttpRequest();
                    ajax.onreadystatechange = function(){
                        if (ajax.readyState == 4 && ajax.status == 200){
                            var resp = ajax.responseText;
                            var split = resp.split(">", 2);
                            //alert(split[1]);
                            var obj = JSON.parse(split[1]);
                            //alert(obj);
                            $("#inputestado").autocomplete("option", "source", obj);
                        }
                    };
                    ajax.open("GET", "servidor.php?estados=true", true);
                    ajax.send();
                }
                
                function carregarCidades(id_uf){
                    var ajax;
                    ajax = new XMLHttpRequest();
                    ajax.onreadystatechange = function(){
                        if (ajax.readyState == 4 && ajax.status == 200){
                            var resp = ajax.responseText;
                            var split = resp.split(">", 2);
                            //alert(split[1]);
                            var obj = JSON.parse(split[1]);
                            //alert(obj);
                            $("#inputcidade").autocomplete("option", "source", obj);
                        }
                    };
                    //alert("servidor.php?id_uf="+id_uf);
                    ajax.open("GET", "servidor.php?id_uf="+id_uf, true);
                    ajax.send();
                }
                
                function carregarBairros(id_cidade){
                    var ajax;
                    ajax = new XMLHttpRequest();
                    ajax.onreadystatechange = function(){
                        if (ajax.readyState == 4 && ajax.status == 200){
                            var resp = ajax.responseText;
                            var split = resp.split(">", 2);
                            //alert(split[1]);
                            var obj = JSON.parse(split[1]);
                            //alert(obj);
                            $("#inputbairro").autocomplete("option", "source", obj);
                        }
                    };
                    //alert("servidor.php?id_cidade="+id_cidade);
                    ajax.open("GET", "servidor.php?id_cidade="+id_cidade, true);
                    ajax.send();
                }
                
                
                function carregarLogradouros(id_bairro){
                    var ajax;
                    ajax = new XMLHttpRequest();
                    ajax.onreadystatechange = function(){
                        if (ajax.readyState == 4 && ajax.status == 200){
                            var resp = ajax.responseText;
                            var split = resp.split(">", 2);
                            //alert(split[1]);
                            var obj = JSON.parse(split[1]);
                            //alert(obj);
                            $("#inputlogradouro").autocomplete("option", "source", obj);
                        }
                    };
                    //alert("servidor.php?id_uf="+id_uf);
                    ajax.open("GET", "servidor.php?id_bairro="+id_bairro, true);
                    ajax.send();
                }
    