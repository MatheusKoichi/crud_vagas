<?php

namespace App\Entity;

use \App\Db\Database;

class Vaga
{
    /** unique user id
     * @var integer
     */
    public $id;

    /** job title
     * @var string
     */
    public $titulo;

    /** job description (could contain html)
     * @var string
     */
    public $descricao;

    /** job description (could contain html)
     * @var (s/n)
     */
    public $ativo;

    /** date the job was published
     * @var string
     */
    public $data;

    /** Method responsible for creating new job vacancies in db
     * @return boolean
     */
    public function cadastrar(){
        //set the date
        $this->data = date('Y-m-d H:i:s');
        //insert the job in db
        $obDatabase = new Database('vagas');
        print_r($obDatabase);
        //attach the id of job in the instance

        //return success

    }

}