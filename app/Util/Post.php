<?php


namespace App\Util;

use GuzzleHttp\Client;

class Post
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function all($param = '')
    {
        $url = 'books/v1/volumes?q=' . $param;
        return $this->endpointRequest($url);
    }

    public function findById($id)
    {
        return $this->endpointRequest('/volumes?q=flowers'.$id);
    }

    public function endpointRequest($url)
    {
        try {
            $url = $url . "&key=" . env('GOOGLE_BOOK_API_KEY');
//            return ['ok'=>200];
            $response = $this->client->request('GET', $url);
        } catch (\Exception $e) {
            dd($e);
            return [];
        }

        return $this->response_handler($response->getBody()->getContents());
    }

    public function response_handler($response)
    {
        if ($response) {
            return json_decode($response);
        }

        return [];
    }
}
