<?php

namespace JoshPJackson\OpenApi\Paths\PathItem\Operation\Responses;

use JoshPJackson\OpenApi\Collection;
use JoshPJackson\OpenApi\Interfaces\Arrayable;
use JoshPJackson\OpenApi\Paths\PathItem\Operation\RequestBody\MediaType;
use JoshPJackson\OpenApi\Traits\CanHaveRef;
use JoshPJackson\OpenApi\Traits\HasRequiredFields;
use JoshPJackson\OpenApi\Traits\IsArrayable;

/**
 * Class Response
 * @package JoshPJackson\OpenApi\Paths\PathItem\Operation\Responses
 */
class Response implements Arrayable
{
	use HasRequiredFields;
	use IsArrayable;
	use CanHaveRef;

	public array $ignore = ['code'];

	/**
	 * @var array|string[]
	 */
	protected array $requiredFields = [
		'description'
	];

	/**
	 * @var string
	 */
	private string $description;

	/**
	 * @var MediaType
	 */
	private MediaType $content;

	/**
	 * @var Collection
	 */
	private Collection $links;

    /**
     * Response constructor.
     * @param int $code
     */
	public function __construct(private int $code) {}

	/**
	 * @return string
	 */
	public function getDescription(): string
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return Response
	 */
	public function setDescription(string $description): Response
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @return MediaType
	 */
	public function getContent(): MediaType
	{
		return $this->content;
	}

	/**
	 * @param MediaType $content
	 * @return Response
	 */
	public function setContent(MediaType $content): Response
	{
		$this->content = $content;
		return $this;
	}

	/**
	 * @return Collection
	 */
	public function getLinks(): Collection
	{
		return $this->links;
	}

	/**
	 * @param string $link
	 * @return Response
	 */
	public function addLink(string $link): Response
	{
		$this->links[] = $link;
		return $this;
	}

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return Response
     */
    public function setCode(int $code): Response
    {
        $this->code = $code;
        return $this;
    }
}