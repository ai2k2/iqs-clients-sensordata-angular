
<?hh

class Store<T> {

  public function __construct(private T $data) {}

  public function get(): T {
    return $this->data;
  }

  public function set(T $x): void {