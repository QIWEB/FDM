# coding=utf-8
# version=python3.7.1
# Tools:Pycharm 2019.1
# _Date_=2020/10/13 20:41


import subprocess
import sys


def move(name):
    subprocess.Popen('mv '+name+' /www/wwwroot/kod/data/Group/public/home/gdrive/', shell=True)


if __name__ == '__main__':
    move(sys.argv[1])
