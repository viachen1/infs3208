# infs3208
To start this application, please fllowing this steps:
Step1:
    Login to your vm
Step2:
    Change you locoal host config to this
    35.192.179.232  www.pengxu_project.com
    
    To change the host config, for mac users:
    open your termianl run 
        sudo vi /etc/hosts
    add the line into the config file
Step3:
    Go to your vm terminal
    Run 
    git clone https://github.com/viachen1/infs3208.git
Step4:
    Go into root
    Run
    sudo su
Step5:
    Check the file
    Run
    cd infs3208
Step6:
    To start the application
    ./start.sh
Step7:
    To stop the application
    ./stop.sh