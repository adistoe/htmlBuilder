<?php


namespace firesnake\htmlBuilder\body;


use firesnake\htmlBuilder\creators\AbstractCreator;
use firesnake\htmlBuilder\creators\InlineCreator;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\creators\ShortCreator;
use firesnake\htmlBuilder\HtmlElement;

class Dfn extends HtmlElement
{
    public function __construct(string $content)
    {
        parent::__construct();
        $this->setCreator(new InlineCreator());
        $this->setContent($content);
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'dfn';
    }
}