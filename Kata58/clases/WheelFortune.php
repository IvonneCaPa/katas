<?php


class WheelFortune
{
  
    private $hidden;
    private $count;

    const HIDDEN_CHAR = '_'; 

    public function __construct(private string $clue, private string $text)
    {
        $this->hidden = '';
        $this->count = 0;
    }


    public function hideText(): void
    {
        for ($i = 0; $i < strlen($this->text); $i++) {
            if (ctype_alpha($this->text[$i])) {
                $this->hidden .= self::HIDDEN_CHAR; 
            } else {
                $this->hidden .= $this->text[$i];
            }
            if ($this->text[$i] == ' ') {
                $this->count++;
                if ($this->count % 3 == 0) {
                    $this->hidden .= PHP_EOL;
                }
            }
        }
        
    }

    
    



}