<?php

class Apache_Solr_Compatibility_Solr4CompatibilityLayer implements Apache_Solr_Compatibility_CompatibilityLayer
{
	/**
	 * Creates a commit command XML string.
	 *
	 * @param boolean $expungeDeletes Defaults to false, merge segments with deletes away
	 * @param boolean $waitFlush Defaults to true, is ignored.
	 * @param boolean $waitSearcher Defaults to true, block until a new searcher is opened and registered as the main query searcher, making the changes visible.
	 * @param float $timeout Maximum expected duration (in seconds) of the commit operation on the server (otherwise, will throw a communication exception). Defaults to 1 hour
	 * @param boolean $softCommit Defaults to false, perform a soft commit instead of a hard commit.
	 * @return string An XML string
	 */
	public function createCommitXml($expungeDeletes = false, $waitFlush = true, $waitSearcher = true, $timeout = 3600, $softCommit = false)
	{
		$expungeValue = $expungeDeletes ? 'true' : 'false';
		$searcherValue = $waitSearcher ? 'true' : 'false';
		$softCommitValue = $softCommit ? 'true' : 'false';

		$rawPost = '<commit expungeDeletes="' . $expungeValue . '" softCommit="' . $softCommitValue . '" waitSearcher="' . $searcherValue . '" />';

		return $rawPost;
	}

	/**
	 * Creates an optimize command XML string.
	 *
	 * @param boolean $waitFlush Is ignored.
	 * @param boolean $waitSearcher
	 * @param float $timeout Maximum expected duration of the commit operation on the server (otherwise, will throw a communication exception)
	 * @return string An XML string
	 */
	public function createOptimizeXml($waitFlush = true, $waitSearcher = true)
	{
		$searcherValue = $waitSearcher ? 'true' : 'false';

		$rawPost = '<optimize waitSearcher="' . $searcherValue . '" />';

		return $rawPost;
	}
}

