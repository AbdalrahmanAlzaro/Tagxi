<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/adaptive_mt.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for importing an AdaptiveMtFile
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.ImportAdaptiveMtFileResponse</code>
 */
class ImportAdaptiveMtFileResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The Adaptive MT file that was imported.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.AdaptiveMtFile adaptive_mt_file = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $adaptive_mt_file = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Translate\V3\AdaptiveMtFile $adaptive_mt_file
     *           Output only. The Adaptive MT file that was imported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AdaptiveMt::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The Adaptive MT file that was imported.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.AdaptiveMtFile adaptive_mt_file = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Translate\V3\AdaptiveMtFile|null
     */
    public function getAdaptiveMtFile()
    {
        return $this->adaptive_mt_file;
    }

    public function hasAdaptiveMtFile()
    {
        return isset($this->adaptive_mt_file);
    }

    public function clearAdaptiveMtFile()
    {
        unset($this->adaptive_mt_file);
    }

    /**
     * Output only. The Adaptive MT file that was imported.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.AdaptiveMtFile adaptive_mt_file = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Translate\V3\AdaptiveMtFile $var
     * @return $this
     */
    public function setAdaptiveMtFile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\AdaptiveMtFile::class);
        $this->adaptive_mt_file = $var;

        return $this;
    }

}

