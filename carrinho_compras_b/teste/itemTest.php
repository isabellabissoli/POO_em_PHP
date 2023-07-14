<?php
use PHPUnit\Framework\TestCase;


class ItemTest extends TestCase{
    public function testeEstouFuncionando(){
        $item = new Item();

        // $item->getDescricao()== "";
        // $item->gatValor()==0; ->Essas duas associações são iguas ao assertEqual embaixo

        $this->assertEquals('',$item->getDescricao());
        $this->assertEquals(0,$item->getValor()); //Estado inicia do item
    }

    public function testeGetSetDescricao(){
        $valor = 35.42;

        $item = new Item();
        $item->setDescricao($valor);
        $this->assertEquals($valor,$item->getDescricao());
    }

    public function testeItemValido(){
        $item = new Item();
        $item->setValor(55);
        $this->setDescricao('Cadeira de Plástico');

        $this->assertEquals(true,$item->itemValido());
        
    }
    /**
     * @dataProvider dataValores
     */

    public function testeGetSetValor($valor){
        $item->setValor(55);
        $this->setValor($valor);
        $this->assertEquals($valor,$item->itemValido());
    }

    public function dataValores(){ //Testa o metodo com os três valores do return
        return [
            [100], 
            [-2], 
            [0] 
        ];
    }
}