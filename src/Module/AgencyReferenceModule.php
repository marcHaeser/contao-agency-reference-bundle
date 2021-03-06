<?php

namespace marchaeser\ContaoAgencyReferenceBundle\Module;
use marchaeser\ContaoAgencyReferenceBundle\Library\MessageGenerator;

class AgencyReferenceModule extends \Module
{
    /**
     * @var string
     */
    protected $strTemplate = 'mod_agencyReference';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');

            $template->wildcard = '### '.utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['agency_reference'][0]).' ###';
            $template->title = $this->headline;
            $template->id = $this->id;
            $template->link = $this->name;
            $template->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id='.$this->id;

            return $template->parse();
        }

        return parent::generate();
    }

    /**
     * Generates the module.
     */
    protected function compile()
    {
        $messageGenerator = \Contao\System::getContainer()->get(MessageGenerator::class);

        $message = $messageGenerator->sayHelloTo('World');

        $this->Template->message = $message;
    }
}
