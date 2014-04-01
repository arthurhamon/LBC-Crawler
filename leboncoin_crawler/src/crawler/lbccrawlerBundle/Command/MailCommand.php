<?php
namespace crawler\lbccrawlerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MailCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('mail:send')
            ->setDescription('Sent Email')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $message_content = '';
        $container = $this->getContainer();

        $ad_repo = $container->get('doctrine')->getRepository("crawlerlbccrawlerBundle:Ad");

        $ads = $ad_repo->findBy(array("isPublish" => 1), array('publishedDate' => 'DESC'));

       foreach ($ads as $ad) {
            $message_content .= '<a href="'.$ad->getUrl().'">'.$ad->getTitle() . '</a><br>';
            $images = $ad->getImages();
            if( count( $images ) > 0 ){
                $image = $images[0];
                $message_content .= '<img src="'.$image->getUrl().'" style="width:350px; height:300px;">';
            }

            $message_content .= '<br>';
        }
        // envoie le mail
        $mail = \Swift_Message::newInstance()
                    ->setSubject('New Update')
                    ->setFrom("arthur.hamon76@gmail.com")
                    ->setTo("arthur.hamon76@gmail.com")
                    ->setBody($message_content, 'text/html');
        $container->get('mailer')->send($mail);


        $output->writeln('Email sent');
    }
}