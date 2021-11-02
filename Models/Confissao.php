<?php
namespace Models; // agrupamento de classes (caminho)

// Classe (ou Tipo) de Objeto
// obs.: Atividade implementa a interface Idados, significando que implementa todos os métodos definidos pela interface
class Confissao implements Idados{
    // Propriedades
	protected $id;
	protected $titulo;
	protected $descricao;
	protected $cor;
	protected $tipo;
	protected $album_id;
	protected $musica_id;
	// obs.: propriedades protected são acessíveis por subclasses (extend)

	// Método construtor.
	public function __construct($id, $descricao, $titulo, $cor, $tipo, $album_id, $musica_id){
		$this->id = $id;
		$this->titulo = $titulo;
		$this->descricao = $descricao;
		$this->cor = $cor;
		$this->tipo = $tipo;
		$this->album_id = $album_id;
		$this->musica_id = $musica_id;
	}

	// Método obrigatório pois é definido na interface
	public function toString(){
		return $this->descricao.' '.$this->cor.' '.$this->album_id.' '.$this->musica_id;
	}

	// Método obrigatório pois é definido na interface
	public function toJson() {
		return json_encode($this->toArray());
		// json_encode converte vetor em string json
	}

	// Método que retorna vetor associativo contendo os valores das propriedades
	public function toArray() {
		return ['id' => $this->id ,'descricao'=>$this->descricao,'titulo'=>$this->titulo,'cor'=>$this->cor,'tipo'=>$this->tipo,'album_id'=>$this->album_id, 'musica_id'=>$this->musica_id];
	}

    // Inclui o conteúdo do Trait
	use trait__get;
}
?>