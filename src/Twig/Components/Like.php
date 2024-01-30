<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;

#[AsLiveComponent('like')]
final class Like
{
    use DefaultActionTrait;

    public $post;
    public $isLiked;
    public $isDisliked;

    #[LiveProp(writable: true)]
    public $likes;

    #[LiveProp(writable: true)]
    public $dislikes;

    #[LiveAction]
    public function like()
    {
        $this->likes++;
    }

    #[LiveAction]
    public function undoLike()
    {
        $this->likes--;
    }

    #[LiveAction]
    public function dislike()
    {
        $this->dislikes++;
    }

    #[LiveAction]
    public function undoDislike()
    {
        $this->dislikes--;
    }
}