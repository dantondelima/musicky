<?php
namespace Models; // agrupamento de classes (caminho)

// Classe (ou Tipo) de Objeto
// obs.: Atividade implementa a interface Idados, significando que implementa todos os métodos definidos pela interface
class Artista_musica implements Idados{
    // Propriedades
	protected $artista_id;
	protected $musica_id;
	// obs.: propriedades protected são acessíveis por subclasses (extend)

	// Método construtor.
	public function __construct($artista_id, $musica_id){
		$this->artista_id = $artista_id;
		$this->musica_id = $musica_id;
	}

	// Método obrigatório pois é definido na interface
	public function toString(){
		return $this->nome;
	}

	// Método obrigatório pois é definido na interface
	public function toJson() {
		return json_encode($this->toArray());
		// json_encode converte vetor em string json
	}

	// Método que retorna vetor associativo contendo os valores das propriedades
	public function toArray() {
		return ['artista_id' => $this->artista_id ,'musica_id'=>$this->musica_id];
	}

    // Inclui o conteúdo do Trait
	use trait__get;
}
?>