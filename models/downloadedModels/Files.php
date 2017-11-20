<?php
    
    
    class Files
    {
        private $url;
        private $lastModified;
        
        public function getUrl()
        {
            return $this->url;
        }

        public function setUrl($value)
        {
            $this->url = $value;
        }

        public function getLastModified()
        {
            return $this->lastModified;
        }

        public function setLastModified($value)
        {
            $this->lastModified = $value;
        }


    }

?>