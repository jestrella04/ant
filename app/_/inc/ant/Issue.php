<?php
namespace Ant;

class Issue
{
    private $issueId;
    private $issueData;
    private $issueActivity;
    private $issueComments;
    private $issueTags;
    private $issueFiles;
    private $api;

    public function __construct($issueId)
    {
        $this->api = new Api();
        $this->issueId = $issueId;

        $this->setData();
        $this->setActivity();
        $this->setComments();
        $this->setTags();
        $this->setFiles();
    }

    public function getData()
    {
        return $this->issueData;
    }

    public function getActivity()
    {
        return $this->issueActivity;
    }

    public function getComments()
    {
        return $this->issueComments;
    }

    public function getTags()
    {
        return $this->issueTags;
    }

    public function getFiles()
    {
        return $this->issueFiles;
    }

    private function setData()
    {
        $params = array();
        $params['issue_id'] = $this->issueId;

        $this->issueData = $this->api->executeApiCall('issueGet', $params);
    }

    private function setActivity()
    {
        $params = array();
        $params['issue_id'] = $this->issueId;

        $this->issueActivity = $this->api->executeApiCall('issueActivityGet', $params);
    }

    public function setComments()
    {
        $params = array();
        $params['issue_id'] = $this->issueId;

        $this->issueComments = $this->api->executeApiCall('issueCommentsGet', $params);
    }

    public function setTags()
    {
        $params = array();
        $params['issue_id'] = $this->issueId;

        $this->issueTags = $this->api->executeApiCall('issueTagsGet', $params);
    }

    public function setFiles()
    {
        $params = array();
        $params['issue_id'] = $this->issueId;

        $this->issueFiles = $this->api->executeApiCall('issueFileGet', $params);
    }
}
