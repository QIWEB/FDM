# coding=utf-8
# version=python3.7.1
# Tools:Pycharm 2019.1
# _Date_=2020/10/13 20:41


import subprocess
import sys


def ffmpeg_download_m3u8(url,name):
    subprocess.Popen('ffmpeg -threads 32 -i '+url+' -c copy -movflags +faststart file/'+name, shell=True)


if __name__ == '__main__':
    ffmpeg_download_m3u8(sys.argv[1],sys.argv[2])
