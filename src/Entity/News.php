<?php
namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;


/** 
 * A News Message 
 * 
 * @ORM\Entity()
 * */

#[ApiResource] 
class News
{

    /**
     * The id of a message
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;
    
    
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
        $this->headline = $name;
    }
}