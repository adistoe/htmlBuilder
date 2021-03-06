<?php

namespace firesnake\htmlBuilder\test;

use firesnake\htmlBuilder\body\Div;
use firesnake\htmlBuilder\body\P;
use firesnake\htmlBuilder\body\Table;
use firesnake\htmlBuilder\body\Tbody;
use firesnake\htmlBuilder\body\Td;
use firesnake\htmlBuilder\body\Template;
use firesnake\htmlBuilder\body\Tfoot;
use firesnake\htmlBuilder\body\Th;
use firesnake\htmlBuilder\body\Thead;
use firesnake\htmlBuilder\body\Time;
use firesnake\htmlBuilder\body\Tr;
use firesnake\htmlBuilder\body\Track;
use firesnake\htmlBuilder\body\Ul;
use firesnake\htmlBuilder\body\VarElement;
use firesnake\htmlBuilder\body\Video;
use firesnake\htmlBuilder\creators\OneLineCreator;
use firesnake\htmlBuilder\Page;
use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase
{

    public function testVideo()
    {
        $page = new Page();

        $div = new Div();
        $page->getBody()->addChild($div);

        $video = new Video();
        $video->autoplay();
        $video->controls();
        $video->setHeight(600);
        $video->loop();
        $video->mute();
        $video->setPoster('posterUrl');
        $video->setPreload('auto');
        $video->setSrc('sample.mp4');
        $video->setWidth(800);

        $div->addChild($video);


        $this->assertEquals(TestUtils::fileContent('VideoTest.html'), $page->create());
    }
}