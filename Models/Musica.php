<?php
namespace Models; // agrupamento de classes (caminho)

// Classe (ou Tipo) de Objeto
// obs.: Atividade implementa a interface Idados, significando que implementa todos os métodos definidos pela interface
class Musica implements Idados{
    // Propriedades
	protected $id;
	protected $nome;
	protected $single;
	protected $imagem;
	// obs.: propriedades protected são acessíveis por subclasses (extend)

	// Método construtor.
	public function __construct($id, $nome, $single, $imagem){
		$this->id = $id;
		$this->nome = $nome;
		$this->single = $single;
		$this->imagem = $imagem;
	}

	// Método obrigatório pois é definido na interface
	public function toString(){
		return $this->nome.' '.$this->single.' '.$this->imagem;
	}

	// Método obrigatório pois é definido na interface
	public function toJson() {
		return json_encode($this->toArray());
		// json_encode converte vetor em string json
	}

	// Método que retorna vetor associativo contendo os valores das propriedades
	public function toArray() {
		return ['id' => $this->id ,'nome'=>$this->nome,'single'=>$this->single,'imagem'=>$this->imagem];
	}

    // Inclui o conteúdo do Trait
	use trait__get;
}
?>