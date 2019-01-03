<?php
    namespace App\model;


    class Photo
    {
        /**
         * @var int
         */
        private $id;
        /**
         * @var string
         */
        private $url;

        /**
         * @var string
         */
        private $title;

        /**
         * @var string
         */
        private $thumbnailUrl;

        /**
         * Photo constructor.
         * @param int $id
         * @param string $url
         */
        public function __construct(int $id, string $url)
        {

            $this->id = $id;
            $this->url = $url;
        }

        /**
         * @return int
         */
        public function getId(): int
        {
            return $this->id;
        }

        /**
         * @return string
         */
        public function getUrl(): string
        {
            return $this->url;
        }

        /**
         * @return string
         */
        public function getTitle(): string
        {
            return $this->title;
        }

        /**
         * @param string $title
         */
        public function setTitle(string $title): void
        {
            $this->title = $title;
        }

        /**
         * @return string
         */
        public function getThumbnailUrl(): string
        {
            return $this->thumbnailUrl;
        }

        /**
         * @param string $thumbnailUrl
         */
        public function setThumbnailUrl(string $thumbnailUrl): void
        {
            $this->thumbnailUrl = $thumbnailUrl;
        }
    }