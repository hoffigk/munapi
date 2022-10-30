<?php
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;

use Doctrine\ORM\Mapping as ORM;


/** 
 * A News Message 
 * 
 * @ORM\Entity()
 * */

#[ApiResource(
    operations: [
        new Get(),
        new GetCollection()
    ]
)]
class News
{

   /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="SEQUENCE")
    * @ORM\SequenceGenerator(sequenceName="id", initialValue=54574)
    * @ORM\Column(type="integer")
    */
    private ?int $id = null;
    /**
     *  @return string
     */
    public function getId(): int 
    {
        return $this->id;
    }
    

    
    /**
     * @ORM\Column
     */
    private string $headline = '';
    /**
     *  @return string
     */
    public function getHeadline(): string 
    {
        return $this->headline;
    }
    /**
     *  @param string $headline
     */
    public function setHeadline(?string $headline): void  {
        $this->headline = $headline;
    }


    /**
     * @ORM\Column
     */
    private string $abstract = '';
    /**
     *  @return string
     */
    public function getAbstract(): string 
    {
        return $this->abstract;
    }
    /**
     *  @param string $abstract
     */
    public function setAbstract(?string $abstract): void  {
        $this->abstract = $abstract;
    }


    /**
     * @ORM\Column
     * @ORM\Column(type="text")
     */
    private string $body = '';
    /**
     *  @return string
     */
    public function getBody(): string 
    {
        return $this->body;
    }
    /**
     *  @param string $body
     */
    public function setBody(?string $body): void  {
        $this->body = $body;
    }    

    /**
     * @ORM\Column
     */
    private int $idNews;

    /**
     * Get the value of idNews, the identifiert from the old database
     */ 
    public function getIdNews()
    {
        return $this->idNews;
    }

    /**
     * Set the value of idNews
     *
     * @return  self
     */ 
    public function setIdNews($idNews)
    {   
        $this->idNews = $idNews;

        return $this;
    }
}