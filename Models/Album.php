<?php
namespace Models; // agrupamento de classes (caminho)

// Classe (ou Tipo) de Objeto
// obs.: Atividade implementa a interface Idados, significando que implementa todos os métodos definidos pela interface
class Album implements Idados{
    // Propriedades
	protected $id;
	protected $nome;
	protected $capa;
	// obs.: propriedades protected são acessíveis por subclasses (extend)

	// Método construtor.
	public function __construct($id, $nome, $capa){
		$this->id= $id;
		$this->nome= $nome;
		$this->capa= $capa;
	}

	// Método obrigatório pois é definido na interface
	public function toString(){
		return $this->nome.' '.$this->capa;
	}

	// Método obrigatório pois é definido na interface
	public function toJson() {
		return json_encode($this->toArray());
		// json_encode converte vetor em string json
	}

	// Método que retorna vetor associativo contendo os valores das propriedades
	public function toArray() {
		return ['id' => $this->id ,'nome'=>$this->nome,'capa'=>$this->capa];
	}

    // Inclui o conteúdo do Trait
	use trait__get;
}
?>