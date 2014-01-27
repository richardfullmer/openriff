<?php

namespace Openriff\Model;

use JMS\Serializer\Annotation as JMS;
 
/**
 * Mirror of the soundcloud js track object
 *
 * @author Richard Fullmer <richardfullmer@gmail.com>
 */
class SoundcloudTrack
{
    /**
     * Integer ID
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $id;

    /**
     * URL to a JPEG image
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $artworkUrl;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $attachementsUri;

    /**
     * Beats per minute
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $bpm;

    /**
     * Track comment count
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $commentCount;

    /**
     * Track commentable (boolean
     *
     * @var Boolean
     *
     * @JMS\Type("boolean")
     */
    protected $commentable;

    /**
     * Timestamp of creation
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y/m/d G:i:s O'>")
     */
    protected $createdAt;

    /**
     * HTML Description
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $description;

    /**
     * Track download count
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $downloadCount;

    /**
     * URL to original file
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $downloadUrl;

    /**
     * Downloadable (boolean)
     *
     * @var Boolean
     *
     * @JMS\Type("boolean")
     */
    protected $downloadable;

    /**
     * Duration in milliseconds
     *
     * @var integer
     *
     * @JMS\Type("integer")
     */
    protected $duration;

    /**
     * Who can embed this track or playlist
     *
     * "all", "me", or "none"
     *
     * @var string
     *
     * @JMS\Type("string")
     */
    protected $embeddableBy;

    /**
     * @var
     *
     * @JMS\Type("integer")
     */
    protected $favoritesCount;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $genre;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $isrc;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $keySignature;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $kind;

    /**
     * @var
     *
     * @JMS\Type("integer")
     */
    protected $labelId;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $labelName;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $license;

    /**
     * @var
     *
     * @JMS\Type("integer")
     */
    protected $originalContentSize;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $originalFormat;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $permalink;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $permalinkUrl;

    /**
     * @var
     *
     * @JMS\Type("integer")
     */
    protected $playbackCount;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $purchaseTitle;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $purchaseUrl;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $release;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $releaseDay;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $releaseMonth;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $releaseYear;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $sharing;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $state;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $streamUrl;

    /**
     * @var
     *
     * @JMS\Type("boolean")
     */
    protected $streamable;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $tagList;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $title;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $trackType;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $uri;

    /**
     * @var
     *
     * @JMS\Type("array")
     */
    protected $user;

    /**
     * @var
     *
     * @JMS\Type("integer")
     */
    protected $userId;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $videoUrl;

    /**
     * @var
     *
     * @JMS\Type("string")
     */
    protected $waveformUrl;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
