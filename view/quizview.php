<?php include "includes/header.php"
//TODO: add styling to quiz
//TODO: hide enter button until all questions are answered
?>



</div>
        <h3>Answer the questions and track your progress!</h3>
            <form method="get" action="score.php">
                <?php foreach($questions as $question) :?>
                <?php $i += 1; ?>
                <div id="question<?= $i ?>">
                    <h5><?= $question['question'] ?></h5>
                       <?php
                            $options = array($question['right_answer'], $question['wrong1'], $question['wrong2']);
                            shuffle($options);
                            foreach($options as $option):
                        ?>
                        <input type="radio" onchange="toggleQuestions(<?= $i ?>)" name="<?= $question['id']?>" value="<?= $option ?>">
                        <label for="<?= $question['id']?>"><?= $option?></label>

                    <?php endforeach; ?>
                </div>
                    <?php endforeach; ?>
                <button name="enter" type="submit">Enter</button>
            </form>
        <script src="includes/script/quizscript.js"></script>
<?php include "includes/footer.php"?>