<?php

namespace App;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectChartService
{

    protected $apiService;
    protected $request;

    /**
     * ProjectChartService constructor.
     * @param $apiService
     */
    public function __construct(Request $request, ApiService $apiService)
    {
        $this->apiService = $apiService;
        $this->request = $request;
    }

    private function getChart($url, $params)
    {
        return $this->apiService->postDummy($url, $params, true);
    }

    public function brandEquity($projectId = '', $startDate = '', $endDate = '')
    {
        $params = $this->generateParams($projectId, '', $startDate, $endDate);

        return $this->getChart('project/brandequity', $params);
    }

    public function uniqueUserPie()
    {
        $params = $this->generateParams();

        return $this->getChart('project/1/uniqueuser', $params);
    }

    public function shareOfMediaBar()
    {
        $params = $this->generateParams();

        return $this->getChart('project/shareofmedia', $params);
    }

    // with uid for socmed
    public function buzzTrend($mediaId, $type = 1)
    {
        return $this->getChartWithMediaAndUid('buzztrend', $type, $mediaId);
    }

    // chart with media
    public function postTrend($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('posttrend', $type, $mediaId);
    }

    public function reachTrend($mediaId, $type = 1)
    {
        return $this->getChartWithMediaAndUid('reachtrend', $type, $mediaId);
    }

    public function interactionTrend($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('interactiontrend', $type, $mediaId);
    }

    public function buzzPie($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('buzz', $type, $mediaId);
    }

    public function interactionPie($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('interaction', $type, $mediaId);
    }

    public function postPie($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('post', $type, $mediaId);
    }

    public function sentimentBar($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('sentiment', $type, $mediaId);
    }

    public function interactionBar($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('interactionrate', $type, $mediaId);
    }

    public function convoData($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('convo', $type, $mediaId);
    }

    public function potentialPie($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('potentialreach', $type, $mediaId);
    }

    public function commentPie($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('comment', $type, $mediaId);
    }

    /*
    edited on 2016/12/17
    public function sharePie($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('share', $type, $mediaId);
    }
    */

    public function reachPie($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('reach', $type, $mediaId);
    }

    public function commentTrend($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('commenttrend', $type, $mediaId);
    }

    public function socialWordCloud($mediaId, $type = 1)
    {
        return $this->getChartWithMedia('wordcloud', $type, $mediaId);
    }

    public function influencer($mediaId, $type = 1)
    {
        return $this->getChartWithMediaAndUid('influencer', $type, $mediaId);
    }

    //chart without media
    public function userTrend($type = 1)
    {
        return $this->getChartWithUidWithoutMedia('usertrend', $type);
    }

    public function sharePie($type = 1)
    {
        return $this->getChartWithUidWithoutMedia('share', $type);
    }

    public function fansTrend($type = 2)
    {
        return $this->getChartWithUidWithoutMedia('fanstrend', $type);
    }

    public function likeTrend($type = 2)
    {
        return $this->getChartWithUidWithoutMedia('liketrend', $type);
    }

    public function dislikeTrend($type = 2)
    {
        return $this->getChartWithUidWithoutMedia('liketrend', $type);
    }

    public function subscribeTrend($type = 2)
    {
        return $this->getChartWithUidWithoutMedia('subscribestrend', $type);
    }

    public function viewPie($type)
    {
        return $this->getChartWithUidWithoutMedia('view', $type);
    }

    public function loveTrend($type)
    {
        return $this->getChartWithUidWithoutMedia('lovetrend', $type);
    }

    public function potentialReachTrend($type = 1)
    {
        return $this->getChartWithUidWithoutMedia('potentialreachtrend', $type);
    }

    public function lovePie($type = 2)
    {
        return $this->getChartWithUidWithoutMedia('love', $type);
    }

    public function commentBar($type = 1)
    {
        return $this->getChartWithUidWithoutMedia('commentinteraction', $type);
    }

    public function viralPie($type = 1)
    {
        return $this->getChartWithoutMedia('viralreach', $type);
    }

    public function likePie($type = 1)
    {
        return $this->getChartWithoutMedia('like', $type);
    }

    public function ratingBar($type = 1)
    {
        return $this->getChartWithoutMedia('rating', $type);
    }

    public function viewTrend($type)
    {
        return $this->getChartWithoutMedia('viewtrend', $type);
    }

    public function countBar($type = 1)
    {
        return $this->getChartWithoutMedia('viewcount', $type);
    }

    public function generateParams($projectId = '', $keywords = '', $startDate = '', $endDate = '', $search = '')
    {
        $projectId = $projectId == '' ? ( $this->request->has('projectId') ? $this->request->input('projectId') : '') : $projectId;
        $keywords = $keywords == '' ? ( $this->request->has('keywords') ? $this->request->input('keywords') : '') : $keywords;
        $startDate = $startDate == '' ? ( $this->request->has('startDate') ? $this->request->input('startDate') : '') : $startDate;
        $endDate = $endDate == '' ? ( $this->request->has('endDate') ? $this->request->input('endDate') : '') : $endDate;
        $searchText = $search == '' ? ( $this->request->has('search') ? $this->request->input('search') : '') : $search;
        $sentiment = $this->request->has('sentiment') ? $this->request->input('sentiment') : '1,0,-1';

        return [
            'pid' => $projectId,
            'StartDate' => $startDate,
            'EndDate' => $endDate,
            'sentiment' => $sentiment,
            'brandID' => $keywords,
            'text' => $searchText
        ];
    }

    private function getChartWithoutMedia($action, $type = 1, $projectId = '', $keywords = '', $startDate = '', $endDate = '', $search = '')
    {
        /*
        $params = $this->generateParams($projectId, $keywords, $startDate, $endDate, $search);

        // Log::warning($action . '==>' . json_encode($params));

        return $this->getChart('project/' . $type .'/' . $action, $params);
        */
        $params = $this->generateParams($projectId, $keywords, $startDate, $endDate, $search);
        if ($type == 2) {
            $params['uid'] = \Auth::user()->id;
        }

//        Log::warning('url ===> ' . 'project/' . $type .'/' . $action);
//        Log::warning($action . '==>' . json_encode($params));

        return $this->getChart('project/' . $type .'/' . $action, $params);
    }

    private function getChartWithMedia($action, $type = 1, $mediaId, $projectId = '', $keywords = '', $startDate = '', $endDate = '', $search = '')
    {
        /*
        $params = $this->generateParams($projectId, $keywords, $startDate, $endDate, $search);
        $url = 'project/'. $type .'/'. $mediaId .'/'. $action;

        Log::warning('url ==> ' . $url . ', ' . $action . '==>' . json_encode($params));

        return $this->getChart($url, $params);
        */
        $params = $this->generateParams();
        if ($type == 2) {
            $params['uid'] = \Auth::user()->id;
        }

        $url = 'project/'. $type .'/'. $mediaId .'/'. $action;

        Log::warning('url ==> ' . $url . ', ' . $action . '==>' . json_encode($params));

        return $this->getChart($url, $params);
    }

    public function getChartWithMediaAndUid($action, $type = 1, $mediaId, $uid = '')
    {
        $params = $this->generateParams();
        if ($type == 2) {
            $params['uid'] = \Auth::user()->id;
        }

        $url = 'project/'. $type .'/'. $mediaId .'/'. $action;

        Log::warning('url ==> ' . $url . ', ' . $action . '==>' . json_encode($params));

        return $this->getChart($url, $params);
    }

    private function getChartWithUidWithoutMedia($action, $type = 1, $projectId = '', $keywords = '', $startDate = '', $endDate = '', $search = '', $uid = '')
    {
        $params = $this->generateParams($projectId, $keywords, $startDate, $endDate, $search);
        if ($type == 2) {
            $params['uid'] = \Auth::user()->id;
        }

        $url = 'project/'. $type .'/'. $action;

        Log::warning('url ==> ' . $url . ', ' . $action . '==>' . json_encode($params));

        return $this->getChart('project/' . $type .'/' . $action, $params);
    }

}
