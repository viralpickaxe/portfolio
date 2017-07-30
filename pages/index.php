<main>
  <section class="quickabout">
    <p>
      I started programming when I was 8. I Co-Founded a startup called whatleads.to when I was 14, and <a href="https://doorpass.io" target=_blank>Doorpass</a> when I was 17. I'm now tackling the world of mental health at <a href="http://talklife.co" target=_blank>TalkLife</a>.
    </p>
  </section>

  <section class="skills-title">
    <h2>These are my skills</h2>
    <ul class="key">
      <li class="know" data-type="know">I know</li>
      <li class="learning" data-type="learning">I'm learning</li>
      <li class="tolearn" data-type="tolearn">Up Next</li>
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

  <section class="works">
    <h2>These are some places i've worked</h2>
    <? foreach ($works as $company => $info) { ?>
      <div class="work">
        <h3><a href="<?= $info['url'] ?>" target=_blank><?= $company ?></a></h3>
        <h4><?= $info['role'] ?></h4>
        <p><?= $info['period'] ?></p>
      </div>
    <? } ?>
  </section>

  <section class="hackathons">
    <h2>These are some hackathons i've done well in</h2>
    <? foreach ($hackathons as $year => $hackathonsinyear) { ?>
      <div class="date"><?= $year ?></div>
      <div class="hackathon-group">
        <? foreach ($hackathonsinyear as $name => $award) { ?>
          <div class="hackathon">
            <h3><?= $award ?></h3>
            <p><?= $name ?></p>
          </div>
        <? } ?>
      </div>
    <? } ?>
  </section>

  <section class="posts">
    <h2>These are some things i've writtern</h2>
    <? foreach ($blogs as $year => $blogsinyear) { ?>
      <div class="date"><?= $year ?></div>
      <div class="post-group">
        <? foreach ($blogsinyear as $name => $data) { ?>
          <div class="post">
            <h3><a href="<?= $data['url'] ?>" target=_blank><?= $name ?></a></h3>
            <p><?= $data['snap'] ?></p>
          </div>
        <? } ?>
      </div>
    <? } ?>
  </section>

  <section class="contact">
    <h2>Say hello to me</h2>
    <div>Tweet me<br><a href="http://twitter.com/viralpickaxe" target=_blank>@viralpickaxe</a></div>
    <div>Hire me<br><a href="/CV.pdf" target=_blank>CV</a></div>
  </section>
</main>

<!-- <div class="modal">
  <div class="browser">
    <div class="taskbar cf"><div class="addressbar">http://iamjamiedavies.com</div><div class="closebtn"><br></div></div>
    <div class="window"><iframe src="http://whatleads.to/reducing-climate-change"></iframe></div>
  </div>
</div> -->