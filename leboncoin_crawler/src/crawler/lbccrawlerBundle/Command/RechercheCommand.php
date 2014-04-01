<?php
namespace crawler\lbccrawlerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RechercheCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('lunch:search')
            ->setDescription('Parse LBC')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $message_content = '';
        $container = $this->getContainer();

        $ad_repo = $container->get('doctrine')->getRepository("crawlerlbccrawlerBundle:Ad");

        $em = $container->get('doctrine')->getManager();

        $parser = $container->get("lbc_parser");

        $url = "http://www.leboncoin.fr/image_son/offres/haute_normandie/occasions/?f=a&th=1&q=Sony+ta+OR+ampli+Sony+OR+sony+st+OR+tuner+sony+OR+Sony+ps+OR+platine+Sony+OR+sony+cd+OR+sony+sb+OR+sony+tc+OR+sony+cassette+OR+sony+deck+OR+sony+str+OR+sony+receiver";
        $ads_links = $parser->parseListPage($url);

        foreach($ads_links as $ad_link){

            ini_set("max_execution_time", "30");

            //vérifie si existe... si oui, arrête tout ça
            if ($ad_repo->findByUrl($ad_link)){
                break;
            }

            $ad = $parser->parseDetailPage($ad_link);
            $em->persist($ad);
        }

        $em->flush();


        $output->writeln('Parsing End');
    }
}