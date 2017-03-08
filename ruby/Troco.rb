class Troco
  # reais: Valor em reais podendo conter centavos
  # Deve retornar um hash com a quantidadede notas
  def get_qtd_notas(reais)
    qtde_notas = {
      '100': 0,
      '50': 0,
      '20': 0,
      '10': 0,
      '5': 0,
      '2': 0,
      '1': 0,
      '0.5': 0,
      '0.25': 0,
      '0.1': 0,
      '0.01': 0
    }

    # colocar o código aqui, exemplo:
    # if reais == 112.1
    # qtde_notas[:'100'] = 1
    # qtde_notas[:'10'] = 1
    # qtde_notas[:'2'] = 1
    # qtde_notas[:'0.1'] = 1
    # end
    
    # looping para verificar quantas notas de 100 reais dará de troco
    while reais >= 100
        qtde_notas[:'100'] = qtde_notas[:'100'] + 1 #contar as notas de 100
        reais = reais - 100 
      end
    # looping para verificar quantas notas de 50 reais dará de troco
    while reais >= 50
        qtde_notas[:'50'] = qtde_notas[:'50'] + 1 
        reais = reais - 50 
      end
    # looping para verificar quantas notas de 20 reais dará de troco
    while reais >= 20
        qtde_notas[:'20'] = qtde_notas[:'20'] + 1 
        reais = reais - 20 
      end
    # looping para verificar quantas notas de 10 reais dará de troco
    while reais >= 10
        qtde_notas[:'10'] = qtde_notas[:'10'] + 1 
        reais = reais - 10 
      end
    # looping para verificar quantas notas de 5 reais dará de troco
    while reais >= 5
        qtde_notas[:'5'] = qtde_notas[:'5'] + 1 
        reais = reais - 5 
      end
    # looping para verificar quantas notas de 100 reais dará de troco
    while reais >= 2
        qtde_notas[:'2'] = qtde_notas[:'2'] + 1 
        reais = reais - 2
      end
    # looping para verificar quantas notas de 1 real dará de troco
    while reais >= 1
        qtde_notas[:'1'] = qtde_notas[:'1'] + 1 
        reais = reais - 1 
      end
    # looping para verificar quantas notas de 0.5 centavos dará de troco
    while reais >= 0.5
        qtde_notas[:'0.5'] = qtde_notas[:'0.5'] + 1
        reais = reais - 0.5 
      end
    # looping para verificar quantas notas de 0.25 centavos dará de troco
    while reais >= 0.25
        qtde_notas[:'0.25'] = qtde_notas[:'0.25'] + 1
        reais = reais - 0.25 
      end
    # looping para verificar quantas notas de 0.1 centavos dará de troco
    while reais >= 0.1
        qtde_notas[:'0.1'] = qtde_notas[:'0.1'] + 1
        reais = reais - 0.1 
      end
    # looping para verificar quantas notas de 0.01 centavo dará de troco
    while reais >= 0.01
        qtde_notas[:'0.01'] = qtde_notas[:'0.01'] + 1
        reais = reais - 0.01 
      end

    qtde_notas
  end
end

