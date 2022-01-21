<!DOCTYPE html>
<html lang="en">

<head>
    <title>Uploaded Images</title>
    <style>
        div.imageDiv {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.imageDiv img {
            width: 100%;
            height: auto;
        }

        div.imageTitle {
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <p><?= anchor('upload', 'Upload File') ?></p>

    <?php foreach ($result->getResult() as $image) :
        //$file = $this->request->getFile($image->Title); 
    ?>
        <div class="imageDiv">
            <a target="_blank" href="<?php echo base_url($image->FileName); ?>">
                <img height="200px" width="200px" src="<?php echo base_url($image->FileName); ?>" title="<?php echo $image->Title ?>">
            </a>
            <div class="imageTitle"><?php echo $image->Title ?></div>
        </div>
    <?php endforeach; ?>

</body>

</html>