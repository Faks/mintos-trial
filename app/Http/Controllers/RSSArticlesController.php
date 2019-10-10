<?php
/**
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *******************************************
 * Company Name: Solum DeSignum
 * Company Website: http://solum-designum.com
 * Company GitHub: https://github.com/SolumDeSignum
 ********************************************************
 * Date: 2019.10.10.
 * Time: 20:36
 */

namespace App\Http\Controllers;


use App\RSSFeed;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use function array_values;
use function compact;
use function file_get_contents;
use function redirect;
use function simplexml_load_string;
use function view;

class RSSArticlesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rssFeeds = RSSFeed::query()->orderBy('published_at', 'desc')->paginate();
        
        return view('home', compact('rssFeeds'));
    }
    
    /**
     * Collecting RSS Feed
     * Parsing RSS Feed
     * Building Array with data
     *
     * @return array
     */
    public function collect() : array
    {
        $simpleXml = simplexml_load_string(file_get_contents('http://www.tvnet.lv/rss/'));
        
        $rssArticles = [];
        foreach ($simpleXml->channel->xpath('item') as $item) {
            $rssArticles[] = [
                'title'        => (string)$item->title,
                'description'  => (string)$item->description,
                'author'       => (string)$item->author,
                'url'          => (string)$item->link,
                'img_data'     => array_values((array)$item->enclosure)[0],
                'published_at' => Carbon::parse((string)$item->pubDate)->format('Y-m-d H:i:s'),
            ];
        }
        
        return $rssArticles;
    }
    
    /**
     * Storing Articles
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function store() : RedirectResponse
    {
        $this->destroy();
        
        foreach ($this->collect() as $article) {
            RSSFeed::query()->firstOrCreate([
                'title'        => $article['title'],
                'description'  => $article['description'],
                'author'       => $article['author'],
                'url'          => $article['url'],
                'img_url'      => $article['img_data']['url'],
                'mime_type'    => $article['img_data']['type'],
                'published_at' => $article['published_at'],
            ]);
        }
        
        return redirect()->back();
    }
    
    /**
     * @throws \Exception
     */
    public function destroy() : void
    {
        foreach (RSSFeed::all() as $article) {
            $article->delete();
        }
    }
}
