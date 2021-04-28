<?php

namespace JoshPJackson\OpenApi\Paths;

use JoshPJackson\OpenApi\Paths\PathItem\Operation;
use JoshPJackson\OpenApi\Traits\CanJsonSerialise;

/**
 * Class PathItem
 * @package JoshPJackson\OpenApi\Paths
 */
class PathItem implements \JsonSerializable
{
    use CanJsonSerialise;

    /**
     * @var string
     */
    private string $ref;

    /**
     * @var string
     */
    private string $summary;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var Operation
     */
    private Operation $get;

    /**
     * @var Operation
     */
    private Operation $put;

    /**
     * @var Operation
     */
    private Operation $post;

    /**
     * @var Operation
     */
    private Operation $delete;

    /**
     * @return string
     */
    public function getRef(): string
    {
        return $this->ref;
    }

    /**
     * @param string $ref
     * @return PathItem
     */
    public function setRef(string $ref): PathItem
    {
        $this->ref = $ref;
        return $this;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     * @return PathItem
     */
    public function setSummary(string $summary): PathItem
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return PathItem
     */
    public function setDescription(string $description): PathItem
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Operation
     */
    public function getGet(): Operation
    {
        return $this->get;
    }

    /**
     * @param Operation $get
     * @return PathItem
     */
    public function setGet(Operation $get): PathItem
    {
        $this->get = $get;
        return $this;
    }

    /**
     * @return Operation
     */
    public function getPut(): Operation
    {
        return $this->put;
    }

    /**
     * @param Operation $put
     * @return PathItem
     */
    public function setPut(Operation $put): PathItem
    {
        $this->put = $put;
        return $this;
    }

    /**
     * @return Operation
     */
    public function getPost(): Operation
    {
        return $this->post;
    }

    /**
     * @param Operation $post
     * @return PathItem
     */
    public function setPost(Operation $post): PathItem
    {
        $this->post = $post;
        return $this;
    }

    /**
     * @return Operation
     */
    public function getDelete(): Operation
    {
        return $this->delete;
    }

    /**
     * @param Operation $delete
     * @return PathItem
     */
    public function setDelete(Operation $delete): PathItem
    {
        $this->delete = $delete;
        return $this;
    }
}