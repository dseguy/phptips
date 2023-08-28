scp -i ~/.ssh/id_rsa_2021 ./images/*.png root@tibere.exakat.io:/mnt/storage/phptip/ 
ssh -i ~/.ssh/id_rsa_2021 root@tibere.exakat.io  "cd /mnt/storage/phptip/ && chmod 544 *.png"
