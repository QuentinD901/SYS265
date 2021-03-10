#secure-ssh.sh

#!/bin/bash

#creates a new ssh user using the $1 paramter
sudo useradd testuser $1

#adds a public key from the local repo or curled from the remote repo
curl -LJO https://raw.githubusercontent.com/QuentinD901/SYS265-tech-journal/main/linux/public-keys/id_rsa.pub
ssh-copy-id testuser@$HOSTNAME

#removes root's ssh ability
echo "PermitRootLogin no" >> /etc/ssh/sshd_config
sudo systemctl restart sshd

#echo "all of my code"


