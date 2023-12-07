<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('One');
        $manager->persist($category);

        $category2 = new Category();
        $category2->setName('Two');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Three');
        $manager->persist($category3);

        $post = new Post();
        $post->setTitle('First Post');
        $post->setBody('This is the first post.');
        $post->setCategory($category);
        $manager->persist($post);


        $manager->flush();
    }
}
