<?php namespace ProcessWire;

/**
 * PageID is an object that holds a single Page ID value
 * 
 * @copyright 2018 Teppo Koivula
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License, version 2
 * @version 0.1.0
 */
class PageID extends WireData {
    
    /**
     * Return the value of this item as a string
     * 
     * @return string
     */
    public function __toString() {
        return (string) $this->value;
    }
    
}
