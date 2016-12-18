<?php
use Symfony\Component\Validator\Constraints as Assert;

class Comment
{
    /**
     * @Assert\NotBlank()
     * @Assert\Email(
     *  checkMX = true
     * )
     */
    private $email;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 5,
     *      max = 2000,
     *      minMessage = "Your message must be longer than {{ limit }} characters",
     *      maxMessage = "Your message cannot be longer than {{ limit }} characters"
     * )
     */
    private $body;
}
