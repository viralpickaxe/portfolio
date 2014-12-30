<main>
  <section class="quickabout">
    <p>
      I started programming when I was 8. 
      I'm now 16 and i've co-founded a startup called <a href="http://whatleads.to" target=_blank>whatleads.to</a>.
    </p>
  </section>

  <section class="skills-title">
    <h2>These are my skills</h2>
    <ul class="key">
      <li class="know" data-type="know">I know</li>
      <li class="learning" data-type="learning">I'm learning</li>
      <li class="tolearn" data-type="tolearn">I want to learn</li>
    </ul>
  </section>

  <? foreach ($skills as $skillgroup => $skillsingroup) { ?>
    <section class="skills">
      <p><?= $skillgroup ?></p>
      <ul>
        <? foreach ($skillsingroup as $skill => $type) { ?>
          <li class="<?= $type ?>"><?= $skill ?></li>
        <? } ?>
      </ul>
    </section>
  <? } ?>

  <section class="projects">
    <h2>These are some things i've worked on</h2>
    <? foreach ($projects as $year => $projectsinyear) { ?>
      <div class="date"><?= $year ?></div>
      <div class="project-group">
        <? foreach ($projectsinyear as $name => $data) { ?>
          <div class="project">
            <div class="content">
              <h3><?= $name ?><span class="type <?= $data['type']['color'] ?>"><?= $data['type']['text'] ?></span></h3>
              <h4><?= $data['tagline'] ?></h4>
              <? foreach ($data['body'] as $line) { ?>
                <p><?= $line ?></p>
              <? } ?>
              <p class="whatidid"><?= $data['whatidid'] ?></p>
              <div class="links">
                <ul>
                  <? foreach ($data['links'] as $text => $link) { ?>
                    <li><a href="<?= $link ?>" target=_blank><?= $text ?></a></li>
                  <? } ?>
                </ul>
              </div>
            </div>
            <img src="<?= $data['image'] ?>" class="<?= $data['imageclass'] ?>"/>
          </div>
        <? } ?>
      </div>
    <? } ?>
  </section>

  <section class="posts">
    <h2>These are some things i've writtern</h2>
    <div class="date">2014</div>
    <div class="post-group">
      <div class="post">
        <h2><a href="https://medium.com/words-by-causehub-io/making-data-useful-2851ac7a9335" target=_blank>Making Data Useful</a></h2>
        <p>My experience with public (gov) data, and how it could be improved</p>
      </div>
      <div class="post">
        <h2><a href="https://medium.com/words-by-causehub-io/schools-getting-in-the-way-of-my-work-5749cf53f110" target=_blank>Schools Getting in the Way of My Work</a></h2>
        <p>As some of you might know, starting up a social enterprise is pretty hard, but starting one while trying to complete GCSEs is even harder...</p>
      </div>
    </div>
  </section>

  <section class="contact">
    <h2>Say hello to me</h2>
    <div>Tweet me<br><a href="http://twitter.com/viralpickaxe" target=_blank>@viralpickaxe</a></div>
    <div>Email me<br><a href="mailto:hello@iamjamiedavies.com">hello@iamjamiedavies.com</a></span></div>
  </section>
</main>
