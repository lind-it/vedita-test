export class Timer
{
    start(callback)
    {
        this.timer = setTimeout(callback, 2000);
    }

    stop()
    {
        clearTimeout(this.timer);
    }
}