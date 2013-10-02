@extends('layouts.master')

@section('content')
<div class="container">
    <div class="page-header"><h1>Pemilu API 2014</h1></div>
    <div class="row">
        <div class="col-lg-8">
            <p class="lead">
                Voters need answers. Am I registered? Where do candidates stand on the
                issues that are important to me? How do I mark the ballot? What can I do
                if I'm having trouble voting?
            </p>
            <p>
                To answer those questions, and many more, we're helping to build an
                open repository of information for Indonesian voters in 2014 &mdash;
                an elections API.
            </p>
            <p>Developers will be able to use the API to build applications that do things like:</p>

            <ul>
                <li>help people make sure they're registered to vote</li>
                <li>tell you how long the line is at your polling place</li>
                <li>let your friends know you voted</li>
                <li>make an animated gif about an issue and share it</li>
                <li>remind you when a political event you want to attend is happening</li>
                <li>play fan-made videos about the candidates</li>
                <li>run a Twitter bot that tweets every time a candidate is mentioned in the news</li>
                <li>show you what the ballot will look like when you vote</li>
                <li>give you an election quiz and tweet your score</li>
                <li>help you report fraud or intimidation</li>
                <li>and many more</li>
            </ul>

            <p>
                <strong><a href="/signup" class="btn btn-success btn-lg">Ayo gabung!</a></strong>
            </p>

            <p>
                We're looking for server, database, web and mobile developers
                to help us build the API and the apps that use it.
                We'd also love to hear from interested designers, marketers,
                illustrators, animators or any talented individual who wants
                to be involved in the project in some way.
            </p>
            <p>
                <strong>Be a part of history</strong> and make it
                easier to vote in Indonesia's largest democratic elections ever.
            </p>
        </div>
        <div class="col-lg-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Apa itu API?</h3>
                </div>
                <div class="panel-body">
                    <p>
                        An API is an <em>Application Programming Interface</em>. An interface
                        is where two systems meet and interact. An API is an interface
                        that an application uses to enable other applications
                        to communicate with it.
                    </p>
                    <p>
                        The Elections API 2014 will be an
                        application that uses its interface to make information and
                        functionality about Indonesia's 2014 elections available to other applications.
                    </p>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Hubungi Kami</h3>
                </div>
                <div class="panel-body">
                    <p>
                        If you're interested in working on the project, send an e-mail
                        to <a href="mailto:contact@pemiluapi.org">contact@pemiluapi.org</a>
                        or tweet <a href="https://twitter.com/PemiluAPI/">@PemiluAPI</a>.
                    </p>
                    <p>
                        You can find the beginnings of a technical proposal for the API
                        in this site's
                        <a href="https://github.com/pemiluAPI/pemiluAPI.github.io/blob/master/README.md">README on GitHub</a>.
                    </p>
                    <p>
                        If you're interested in talking about the project, you can start
                        or join a conversation on this site's
                        <a href="https://github.com/pemiluAPI/pemiluAPI.github.io/issues">GitHub Issues page</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop