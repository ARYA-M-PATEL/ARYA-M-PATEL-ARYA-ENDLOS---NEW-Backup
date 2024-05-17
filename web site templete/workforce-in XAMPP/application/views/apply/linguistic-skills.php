<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-12 mb-4">
        <h4>[1] English :</h4>
        <div class="star-rating">
            <h6 class="skill">Read :</h6>
            <div class="stars">
                <i class="far fa-lg fa-star english-read active"></i>
                <i class="far fa-lg fa-star english-read active"></i>
                <i class="far fa-lg fa-star english-read active"></i>
                <i class="far fa-lg fa-star english-read"></i>
                <i class="far fa-lg fa-star english-read"></i>
            </div>
        </div>
        <div class="star-rating ">
            <h6 class="skill">Write :</h6>
            <div class="stars">
                <i class="far fa-lg fa-star english-write active"></i>
                <i class="far fa-lg fa-star english-write active"></i>
                <i class="far fa-lg fa-star english-write active"></i>
                <i class="far fa-lg fa-star english-write"></i>
                <i class="far fa-lg fa-star english-write"></i>
            </div>
        </div>

        <div class="star-rating">
            <h6 class="skill">Speak :</h6>
            <div class="stars">
                <i class="far fa-lg fa-star english-speak active"></i>
                <i class="far fa-lg fa-star english-speak active"></i>
                <i class="far fa-lg fa-star english-speak active"></i>
                <i class="far fa-lg fa-star english-speak"></i>
                <i class="far fa-lg fa-star english-speak"></i>
            </div>
        </div>
    </div>
    <div class="col-md-12 mb-4">
        <h4>[2] Hebrew :</h4>
        <div class="star-rating">
            <h6 class="skill">Read :</h6>
            <div class="stars">
                <i class="far fa-lg fa-star english-read active"></i>
                <i class="far fa-lg fa-star english-read active"></i>
                <i class="far fa-lg fa-star english-read active"></i>
                <i class="far fa-lg fa-star english-read"></i>
                <i class="far fa-lg fa-star english-read"></i>
            </div>
        </div>
        <div class="star-rating ">
            <h6 class="skill">Write :</h6>
            <div class="stars">
                <i class="far fa-lg fa-star english-write active"></i>
                <i class="far fa-lg fa-star english-write active"></i>
                <i class="far fa-lg fa-star english-write active"></i>
                <i class="far fa-lg fa-star english-write"></i>
                <i class="far fa-lg fa-star english-write"></i>
            </div>
        </div>

        <div class="star-rating">
            <h6 class="skill">Speak :</h6>
            <div class="stars">
                <i class="far fa-lg fa-star english-speak active"></i>
                <i class="far fa-lg fa-star english-speak active"></i>
                <i class="far fa-lg fa-star english-speak active"></i>
                <i class="far fa-lg fa-star english-speak"></i>
                <i class="far fa-lg fa-star english-speak"></i>
            </div>
        </div>
    </div>
    <div class="col-md-12 mb-4">
        <h4>[3] Arabic :</h4>
        <div class="star-rating">
            <h6 class="skill">Read :</h6>
            <div class="stars">
                <i class="far fa-lg fa-star english-read active"></i>
                <i class="far fa-lg fa-star english-read active"></i>
                <i class="far fa-lg fa-star english-read active "></i>
                <i class="far fa-lg fa-star english-read"></i>
                <i class="far fa-lg fa-star english-read"></i>
            </div>
        </div>
        <div class="star-rating ">
            <h6 class="skill">Write :</h6>
            <div class="stars">
                <i class="far fa-lg fa-star english-write active"></i>
                <i class="far fa-lg fa-star english-write active"></i>
                <i class="far fa-lg fa-star english-write active"></i>
                <i class="far fa-lg fa-star english-write"></i>
                <i class="far fa-lg fa-star english-write"></i>
            </div>
        </div>

        <div class="star-rating">
            <h6 class="skill">Speak :</h6>
            <div class="stars">
                <i class="far fa-lg fa-star english-speak active"></i>
                <i class="far fa-lg fa-star english-speak active"></i>
                <i class="far fa-lg fa-star english-speak active"></i>
                <i class="far fa-lg fa-star english-speak"></i>
                <i class="far fa-lg fa-star english-speak"></i>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h2>Educational Information</h2>
        <select class="form-select mb-5" aria-label="Default select example">
            <option selected>Select Course</option>
            <option>Engineer</option>
            <option>Practical Engineer</option>
            <option>B.Tech</option>
            <option>MBA</option>
            <option>BCA</option>
            <option>B.Sc</option>
        </select>
    </div>
    <div class="col-12">
        <?= anchor('apply/family-information', 'Prev', 'class="thm-btn"'); ?>
        <?= anchor('apply/professional-information', 'Next', 'class="thm-btn"'); ?>
    </div>
</div>

<script>
    const feeds = document.querySelectorAll('.stars');

    feeds.forEach((feed) => {
        const stars = feed.querySelectorAll('.stars i');

        stars.forEach((star, index1) => {
            star.addEventListener('click', () => {
                stars.forEach((star, index2) => {
                    index1 >= index2
                        ? star.classList.add('active')
                        : star.classList.remove('active');
                });
            });
        });
    });
</script>