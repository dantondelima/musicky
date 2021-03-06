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
	protected $album_id;
	// obs.: propriedades protected são acessíveis por subclasses (extend)

	// Método construtor.
	public function __construct($id, $nome, $single, $imagem, $album_id = null){
		$this->id = $id;
		$this->nome = $nome;
		$this->single = $single;
		$this->imagem = $imagem;
		$this->album_id = $album_id;
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
		return ['id' => $this->id ,'nome'=>$this->nome,'single'=>$this->single,'imagem'=>$this->imagem, 'album_id'=>$this->album_id];
	}

    // Inclui o conteúdo do Trait
	use trait__get;
}
?>