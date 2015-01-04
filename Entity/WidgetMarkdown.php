<?php
namespace Victoire\Widget\MarkdownBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Widget\HtmlBundle\Entity\WidgetHtml;

/**
 * WidgetMarkdown
 *
 * @ORM\Table("vic_widget_markdown")
 * @ORM\Entity
 */
class WidgetMarkdown extends WidgetHtml
{

    /**
     * @var content
     *
     * @ORM\Column(name="markdown", type="text")
     */
    protected $markdown;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     *
     * @return String
     */
    public function __toString()
    {
        return 'Markdown #'.$this->id;
    }

    /**
     * Get markdown
     *
     * @return string
     */
    public function getMarkdown()
    {
        return $this->markdown;
    }
    
    /**
     * Set markdown
     * @param string $markdown
     *
     * @return $this
     */
    public function setMarkdown($markdown)
    {
        $this->markdown = $markdown;

        return $this;
    }
}
