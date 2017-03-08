<?php

/**
 * Class Troco
 * Classe para calcular a quantidade de notas necessárias para um determinado valor em Reais.
 * Suporta centavos.
 */
class Troco
{
    /**
     * Dado um valor em reais, retorna a quantidade de notas necessárias para formar o troco.
     *
     * @param $reais Valor em reais, podendo conter centavos.
     * @return array Quantidade de notas, indexada pelo seu valor.
     */
    public function getQtdeNotas($reais)
    {
        $qtdeNotas = [
          '100' => 0,
           '50' => 0,
           '20' => 0,
           '10' => 0,
            '5' => 0,
            '2' => 0,
            '1' => 0,
          '0.5' => 0,
         '0.25' => 0,
          '0.1' => 0,
         '0.01' => 0
        ];

        // colocar o código aqui, exemplo:
       /**  if ($reais == 112.1) {
            $qtdeNotas['100'] = 1;
            $qtdeNotas['10'] = 1;
            $qtdeNotas['2'] = 1;
            $qtdeNotas['0.1'] = 1;
        }*/
        
        // looping para verificar quantas notas de 100 reais dará de troco
        while ($reais >= 100){
            $qtdeNotas['100'] = $qtdeNotas['100'] + 1;//contar as notas de 100
            $reais = $reais - 100;
        }
        // looping para verificar quantas notas de 50 reais dará de troco
         while ($reais >= 50){
            $qtdeNotas['50'] = $qtdeNotas['50'] + 1;
            $reais = $reais - 50;
        }
        // looping para verificar quantas notas de 20 reais dará de troco
         while ($reais >= 20){
            $qtdeNotas['20'] = $qtdeNotas['20'] + 1;
            $reais = $reais - 20;
        }
        // looping para verificar quantas notas de 10 reais dará de troco
         while ($reais >= 10){
            $qtdeNotas['10'] = $qtdeNotas['10'] + 1;
            $reais = $reais - 10;
        }
        // looping para verificar quantas notas de 5 reais dará de troco
         while ($reais >= 5){
            $qtdeNotas['5'] = $qtdeNotas['5'] + 1;
            $reais = $reais - 5;
        }
        // looping para verificar quantas notas de 2 reais dará de troco
         while ($reais >= 2){
            $qtdeNotas['2'] = $qtdeNotas['2'] + 1;
            $reais = $reais - 2;
        }
        // looping para verificar quantas notas de 1 real dará de troco
         while ($reais >= 1){
            $qtdeNotas['1'] = $qtdeNotas['1'] + 1;
            $reais = $reais - 1;
        }
        // looping para verificar quantas notas de 0.5 centavos dará de troco
         while ($reais >= 0.5){
            $qtdeNotas['0.5'] = $qtdeNotas['0.5'] + 1;
            $reais = $reais - 0.5;
        }
        // looping para verificar quantas notas de 0.25 centavos dará de troco
        while ($reais >= 0.25){
            $qtdeNotas['0.25'] = $qtdeNotas['0.25'] + 1;
            $reais = $reais - 0.25;
        }
        // looping para verificar quantas notas de 0.1 centavos dará de troco
        while ($reais >= 0.1){
            $qtdeNotas['0.1'] = $qtdeNotas['0.1'] + 1;
            $reais = $reais - 0.1;
        }
        // looping para verificar quantas notas de 0.01 centavo dará de troco
        while ($reais >= 0.01){
            $qtdeNotas['0.01'] = $qtdeNotas['0.01'] + 1;
            $reais = $reais - 0.01;
        }
            
        
        return $qtdeNotas;
    }
}

