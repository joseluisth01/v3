<?php

namespace App\Library\RtfHtml;

class Group extends Element
{
    public $parent;
    public $children;

    /*
     * Create a new Group, with no parent and no children.
     */
    public function __construct()
    {
        $this->parent = null;
        $this->children = [];
    }

    public function getType()
    {
        // No children? Then the group type is null.
        if (sizeof($this->children) == 0) {
            return null;
        }

        // If the first child is a control word, then
        // the group type is the word.
        $child = $this->children[0];
        if ($child instanceof ControlWord) {
            return $child->word;
        } elseif ($child instanceof ControlSymbol) {
            // If the first child is a control symbol, then the group type is * for a special symbol, or null.
            return ($child->symbol == '*') ? '*' : null;
        }

        // If first child is neither word nor symbol, then
        // group type is null.
        return null;
    }

    // If a group contains a * symbol as its first child,
    // then it is a destination group.
    public function isDestination()
    {
        // If group has no children, then destination is null.
        if (sizeof($this->children) == 0) {
            return null;
        }
        // First child not a control symbol?
        $child = $this->children[0];
        if (!$child instanceof ControlSymbol) {
            return null;
        }

        return $child->symbol == '*';
    }

    //
    // Convert Group to string for debugging purposes.
    //
    public function toString(int $level = 0)
    {
        $str = str_repeat('  ', $level)."{\n";

        foreach ($this->children as $child) {
            /*
            // Skip some group types:
            if($child instanceof Group) {
              if ($child->getType() == "fonttbl") continue;
              if ($child->getType() == "colortbl") continue;
              if ($child->getType() == "stylesheet") continue;
              if ($child->getType() == "info") continue;
              // Skip any pictures:
              if (substr($child->getType(), 0, 4) == "pict") continue;
              if ($child->isDestination()) continue;
            } */
            $str .= $child->toString($level + 1);
        }

        return $str.str_repeat('  ', $level)."}\n";
    }
}
