<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TaskController extends AbstractController
{
    /**
     * @Route("/task", name="task")
     */
    public function index(Request $request)
    {
        $task = new Task();
        $task->setDescription('some description');

        // dummy code - this is here just so that the Task has some tags
        // otherwise, this isn't an interesting example
        $tag1 = new Tag();
        $tag1->setName('tag 1');
        $task->getTags()->add($tag1);
        $tag2 = new Tag();
        $tag2->setName('tag 2');
        $task->getTags()->add($tag2);
        $tag3 = new Tag();
        $tag3->setName('tag 3');
        $task->getTags()->add($tag3);
        $tag4 = new Tag();
        $tag4->setName('tag 4');
        $task->getTags()->add($tag4);
        $tag5 = new Tag();
        $tag5->setName('tag 5');
        $task->getTags()->add($tag5);
        // end dummy code

        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ... maybe do some form processing, like saving the Task and Tag objects
            dump($task);
        }

        return $this->render('task/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}

