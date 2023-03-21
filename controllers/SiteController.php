<?php

namespace app\controllers;

use app\models\AddPost;
use app\models\Grups;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Groups;
use app\models\Jadwals;
use app\models\Teams;
use app\models\Posts;
use yii\data\Pagination;
use yii\db;
use yii\db\Query;
use yii\helpers\VarDumper;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Posts::find();
        $new_post = $query
            ->select(['id','writer', 'short_post', 'title'])
            ->orderBy('id DESC')
            ->limit(4)
            ->all();

        $old_post = $query
            ->select(['id','writer', 'short_post', 'title', 'created_at'])
            ->orderBy('id ASC')
            ->limit(5)
            ->all();
        // VarDumper::dump($old_post);
        return $this->render('index', [
            'new_post' => $new_post,
            'old_post' => $old_post,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionPost()
    {
        // $model = new ContactForm();
        // if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
        //     Yii::$app->session->setFlash('contactFormSubmitted');

        //     return $this->refresh();
        // }
        // return $this->render('contact', [
        //     'model' => $model,
        // ]);
        $post = new AddPost();

        if ($post->load(Yii::$app->request->post()) && $post->validate()) {
            $request = Yii::$app->request;

            $posts = new Posts();
            $posts->writer = $request->post('AddPost')['writer'];
            $posts->title = $request->post('AddPost')['title'];
            $posts->post = $request->post('AddPost')['post'];

            $get_half = strrpos(substr($posts->post, 0, floor(strlen($posts->post) / 8)), ' ') + 1;
            $posts->short_post = substr($posts->post, 0, $get_half);
            $posts->save();

            Yii::$app->session->setFlash('success', "post added successfully."); 
            return $this->refresh();
        }
        
        return $this->render('post', [
            'post' => $post,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionEditPost($id)
    {
        $post = new AddPost();

        if ($post->load(Yii::$app->request->post()) && $post->validate()) {
            $request = Yii::$app->request;

            $posts = Posts::findOne(['id', $id]);
            $posts->writer = $request->post('AddPost')['writer'];
            $posts->title = $request->post('AddPost')['title'];
            $posts->post = $request->post('AddPost')['post'];

            $get_half = strrpos(substr($posts->post, 0, floor(strlen($posts->post) / 8)), ' ') + 1;
            $posts->short_post = substr($posts->post, 0, $get_half);
            $posts->save();

            Yii::$app->session->setFlash('success', "post update successfully."); 
            return $this->refresh();
        } else {
            $posts = Posts::findOne(['id', $id]);
            return $this->render('edit', [
                'posts' => $posts,
                'post' => $post,
            ]);
        }
    }


    public function actionDetail($id)
    {
        $post = Posts::findOne(['id', $id]);
        return $this->render('detail', [
            'post' => $post,
        ]);
    }

    public function actionSay()
    {
        // $query = Teams::find();
        // $pagianation = new Pagination([
        //     'defaultPageSize' => 5,
        //     'totalCount' => $query->count(),
        // ]);

        // $team = $query->orderBy('season')
        //     ->offset($pagianation->offset)
        //     ->limit($pagianation->limit)
        //     ->all();
        
        $teamA = (new Query)->select('Team')->from('teams')->where('teams.id = jadwals.teamA_id');
        $teamB = (new Query)->select('Team')->from('teams')->where('teams.id = jadwals.teamB_id');
        $jadwal = (new Query)->select(['*', 'teamA' => $teamA, 'teamB' => $teamB])->from('jadwals');

        $jadwals = Yii::$app->db->createCommand("select ScoreA,ScoreB,tanggal,main, (select Team from teams where teams.id=jadwals.teamA_id) as teamA, (select Team from teams where teams.id=jadwals.teamB_id) as teamB,(select Logo from teams where teams.id=jadwals.teamA_id) as logoA,(select Logo from teams where teams.id=jadwals.teamB_id) as logoB  from jadwals order by id desc limit 4;")->queryAll();
        
        
        // VarDumper::dump($jadwals);
        return $this->render('say', [
            'jadwals' => $jadwals,
        ]);
    }
}
