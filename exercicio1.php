//
1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, 
negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".//






$val = -69; //Valor de entrada
$resultado = "";

if($val > 0){
  $resultado = "Valor Positivo";
}elseif($val < 0){
  $resultado = "Valor Negativo";
}else{
  $resultado = "Igual a Zero";
}

echo $resultado;