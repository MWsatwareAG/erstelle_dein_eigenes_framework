# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.10"
    config.vm.hostname = "scotchbox"
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
    config.vm.provision "shell", inline: <<-SHELL
    sudo apt-get update
    sudo apt-get -y install phpunit
    mkdir -p /var/www/public/framework
    chmod 777 /var/www/public/framework
    touch /var/www/public/framework/index.php
    SHELL
end